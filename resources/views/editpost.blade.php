<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            * {
                box-sizing: border-box;
            }

            input[type=text],
            select,
            textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: left;
            }

            input[type=submit]:hover {
                background-color: #225424;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .col-25 {
                float: left;
                width: 12%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row::after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {

                .col-25,
                .col-75,
                input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }
        </style>
    </head>

    <body>
        <div class="container" style="background-color: #ccc">
            <div>
                <h1> <b>Edit Post</b></h1>
            </div>
        </div>

        <div class="container">
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-25">
                        <label for="title">Title</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="title" name="title" placeholder="Title"
                            value="{{ $post->title }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="body">Body</label>
                    </div>
                    <div class="col-75">
                        <textarea id="body" name="body" placeholder="Write something..." style="height:200px">{{ $post->body }}</textarea>
                    </div>
                </div>
                <br>
                <div class="row">

                    <input type="submit" value="Update">

                </div>
            </form>
            <div class="container">
                @if (session()->has('status'))
                    <div class="mt-10 shadow bg-purple-500 text-green font-bold py-2 px-4 rounded ">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

    </body>

    </html>
</x-app-layout>
