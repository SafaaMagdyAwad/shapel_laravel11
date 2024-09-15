<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messaging Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <!-- Contacts/Users Column -->
            <div class="col-md-4">
                <div class="list-group">

                    @foreach ($users as $user)
                    <a href="{{ route('conversation.show',$user) }}" class="list-group-item list-group-item-action {{ $loop->first?'active':"" }}">{{ $user->name }}</a>
                    @endforeach

                </div>
            </div>

            @if (isset($reciver))
            <!-- Messaging Column -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Chat with {{ $reciver->name }}
                    </div>
                    <div class="card-body" id="messageContainer" style="height: 300px; overflow-y: scroll;">
                        <!-- Messages -->
                        <div class="d-flex justify-content-start mb-4">
                            <div class="bg-light p-3 rounded shadow-sm">Hello, how are you?</div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="bg-primary text-white p-3 rounded shadow-sm">I'm good, thanks! What about you?</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form id="messageForm" action="{{ route('conversation.store') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="hidden" name="reciver_id" value=2>
                                <input type="text" class="form-control" placeholder="Type a message..." id="messageInput" name="message">
                                <button class="btn btn-primary" type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('messageForm').addEventListener('submit', function(e) {
            e.preventDefault();
            let message = document.getElementById('messageInput').value;
            let messageContainer = document.getElementById('messageContainer');

            let newMessage = document.createElement('div');
            newMessage.classList.add('d-flex', 'justify-content-end', 'mb-4');
            newMessage.innerHTML = `<div class="bg-primary text-white p-3 rounded shadow-sm">${message}</div>`;

            messageContainer.appendChild(newMessage);
            document.getElementById('messageInput').value = '';
        });
    </script>
</body>
</html>
