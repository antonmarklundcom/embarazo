/* Native share is optional: the WhatsApp anchor remains the fallback. */
if (navigator.share) {
  document.querySelectorAll('[data-share]').forEach(link => {
    link.addEventListener('click', async event => {
      event.preventDefault();
      try { await navigator.share({title: link.dataset.shareTitle, url: link.dataset.shareUrl}); }
      catch (error) { if (error.name !== 'AbortError') window.location.assign(link.href); }
    });
  });
}
