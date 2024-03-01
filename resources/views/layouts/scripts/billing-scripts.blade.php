<script>
    document.addEventListener("DOMContentLoaded", () => {
      Livewire.hook('message.processed', (component) => {
        setTimeout(function() {
          $('#alert').fadeOut('fast');
        }, 5000);
      });
    });
  
    window.livewire.on('closeBillingModal', () => {
      $('#billingModal').modal('hide');
    });
  
    window.livewire.on('openBillingModal', () => {
      $('#billingModal').modal('show');
    });
  </script>