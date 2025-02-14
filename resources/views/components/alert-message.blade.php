<div class="fixed top-4 right-4 p-4 border-l-4 shadow-lg w-96"
     id="alert-message"
     data-msgtype="{{ $msgtype }}"
     data-msgtitle="{{ $msgtitle }}"
     role="alert">

    <!-- Progress Bar -->
    <div id="progress-bar" class="absolute top-0 left-0 w-full h-1 bg-gray-200">
        <div class="h-full"></div>
    </div>

    <!-- Message Content -->
    <p class="font-bold">{{ $msgtitle }}</p>
    <p>{{ $slot }}</p>
</div>

<!-- jQuery and Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize timer and interval
        var timer = 100;  // 100 = 10 seconds (100 ticks for 10 seconds)
        var interval;

        // Get message type and title from data attributes
        var msgtype = $('#alert-message').data('msgtype');
        var msgtitle = $('#alert-message').data('msgtitle');

        // Define message classes based on type (for both the message and progress bar color)
        var msgClasses = {
            success: {
                message: 'bg-green-200 border-green-600 text-green-600',
                progress: 'bg-green-500'
            },
            error: {
                message: 'bg-red-200 border-red-600 text-red-600',
                progress: 'bg-red-500'
            },
            warning: {
                message: 'bg-yellow-200 border-yellow-600 text-yellow-600',
                progress: 'bg-yellow-500'
            },
            info: {
                message: 'bg-blue-200 border-blue-600 text-blue-600',
                progress: 'bg-blue-500'
            }
        };

        // Add the relevant class based on msgtype
        $('#alert-message').addClass(msgClasses[msgtype].message);

        // Set the progress bar color
        $('#progress-bar > div').addClass(msgClasses[msgtype].progress);

        // Start the progress bar timer
        function startTimer() {
            interval = setInterval(function() {
                if (timer > 0) {
                    timer--;
                    var progress = (0 + timer) + '%';  // Calculate the progress width (from 100% to 0%)
                    $('#progress-bar > div').css('width', progress);  // Update the progress bar width
                } else {
                    clearInterval(interval);  // Stop the timer
                    $('#alert-message').fadeOut();  // Hide the alert after the timer runs out
                }
            }, 50); // Update every 100ms
        }

        // Show the message and start the timer
        $('#alert-message').fadeIn();
        startTimer();
    });
</script>
