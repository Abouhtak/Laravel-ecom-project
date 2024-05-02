
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manga Store') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <center>  {{ __("You're logged in!") }}</center>
                </div>
            </div>
        </div>
    </div>
    <div class="card-row">
        <div class="card">
          <div class="card-content">
           <center> <img src="{{asset('img/mangas/bleach.jpg')}}" alt=""></center>
            <a href="{{route('Action')}}" class="card-button">Action</a>
          </div>
        </div>

        <div class="card">
          <div class="card-content">
            <center> <img src="{{asset('img/mangas/naruto.jpg')}}" alt=""></center>
            <a href="{{route('Adventure')}}" class="card-button">Adventure</a>
          </div>
        </div>

        <div class="card">
          <div class="card-content">
            <center> <img src="{{asset('img/mangas/op.jpg')}}" alt=""></center>

            <a href="{{route('Thriller')}}" class="card-button">Thriller</a>
          </div>


        </div>
      </div>
      



</x-app-layout>




  <style>
.card-row {
  display: flex;
  justify-content: space-between;
}

.card {
  width: 300px;
  height: 400px;
  background-color: #f1f1f1;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: box-shadow 0.3s;
}

.card:hover {
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.card-content {
  padding: 20px;
  text-align: center;
}

.card-content h3 {
  margin-top: 0;
}

.card-button {
  display: none;
  background-color: #4CAF50;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  border-radius: 4px;
}

.card:hover .card-button {
  display: inline-block;
}



  </style>




