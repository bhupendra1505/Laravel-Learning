<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            
                        
                        @livewire('counter')
                   
        </div>
    </div>
    @livewireScripts
</body>
</html> 
