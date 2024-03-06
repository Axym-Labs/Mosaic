{foreach $message in $notifier.GetMessages()}
    <div class="card">
        <div class="card-body message-{$message["messageType"]}">
            <p>{$message["message"]}</p>
            <button class="btn btn-danger" onclick="this.parentElement.parentElement.remove()">Remove</button>
        </div>
    </div>
{/foreach}