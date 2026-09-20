import { test } from 'node:test';
import assert from 'node:assert/strict';
import '../assets/js/tools/pregnancy.js';
const p = globalThis.Pregnancy;
const DAY = 86400000;

test('app clampWeek vectors', () => {
  for (const [input, expected] of [[0,1],[-5,1],[43,42],[100,42],[1,1],[20,20],[20.9,20],[NaN,1]]) {
    assert.equal(p.clampWeek(input), expected);
  }
});
test('app current week and raw week vectors', () => {
  for (const [days, expected] of [[0,1],[7,2],[91,14],[420,42]]) assert.equal(p.getCurrentWeek(0, days*DAY), expected);
  assert.equal(p.getRawWeek(0,0),1);
  assert.equal(p.getRawWeek(0,350*DAY),51);
});
test('app trimester boundaries', () => {
  for (const [week, expected] of [[1,1],[13,1],[14,2],[27,2],[28,3],[42,3]]) assert.equal(p.getTrimester(week),expected);
});
test('app due date and inverse vectors', () => {
  const lmp = 1_000_000_000_000, due = 2_000_000_000_000;
  assert.equal(p.getDueDate(lmp),lmp+280*DAY);
  assert.equal(p.lmpFromDueDate(p.getDueDate(lmp)),lmp);
  assert.equal(p.lmpFromDueDate(due),due-280*DAY);
});
test('app elapsed and remaining days vectors', () => {
  assert.equal(p.getDaysRemaining(0,0),280);
  assert.equal(p.getDaysRemaining(0,400*DAY),0);
  for (const [days, expected] of [[0,0],[-5,0],[16,16]]) assert.equal(p.getDaysSinceLMP(0,days*DAY),expected);
});
test('app 121-day vector and singular/plural labels', () => {
  assert.deepEqual(p.getCompletedGestation(0,121*DAY),{weeks:17,days:2});
  assert.equal(p.getCurrentWeek(0,121*DAY),18);
  assert.equal(p.formatCompletedGestation(p.getCompletedGestation(0,121*DAY)),'17 semanas y 2 días');
  assert.deepEqual(p.getCompletedGestation(0,0),{weeks:0,days:0});
  assert.equal(p.formatCompletedGestation({weeks:1,days:1}),'1 semana y 1 día');
  assert.equal(p.formatCompletedGestation({weeks:0,days:0}),'0 semanas y 0 días');
});
test('required FUM/FPP reference vector', () => {
  const lmp = p.parseISO('2026-03-02'), now = p.parseISO('2026-09-20');
  assert.equal(p.getCurrentWeek(lmp,now),29);
  assert.equal(p.formatCompletedGestation(p.getCompletedGestation(lmp,now)),'28 semanas y 6 días');
  assert.equal(p.toISO(p.getDueDate(lmp)),'2026-12-07');
  assert.equal(p.lmpFromDueDate(p.parseISO('2026-12-07')),lmp);
});
test('UTC dates reject invalid input and preserve leap days', () => {
  for (const value of ['',null,'2026-02-31','2026-13-01','2026-00-01','2026-01-00']) assert.ok(Number.isNaN(p.parseISO(value)));
  assert.equal(p.toISO(p.parseISO('2028-02-29')),'2028-02-29');
  assert.equal(p.parseISO('2026-03-09')-p.parseISO('2026-03-08'),DAY);
});
test('fertile window uses cycle day length minus 14, with five days on each side', () => {
  const lmp = p.parseISO('2026-09-01');
  const dates = p.getFertileWindow(lmp,28);
  assert.equal(p.toISO(dates.ovulation),'2026-09-14');
  assert.equal(p.toISO(dates.start),'2026-09-09');
  assert.equal(p.toISO(dates.end),'2026-09-19');
  assert.equal(p.toISO(p.getFertileWindow(lmp,30).ovulation),'2026-09-16');
  assert.equal(p.getFertileWindow(lmp,21).end-p.getFertileWindow(lmp,21).start,10*DAY);
});
