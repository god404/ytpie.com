{if isset($alert)}
<div class="alert alert-{$alert.level} alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>{$alert.text}</strong>
</div>
{/if}