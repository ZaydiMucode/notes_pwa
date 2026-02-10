@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-4">
    <div class="mb-4 space-y-2">
      
        <form action="{{route('index')}}" class="mb-4 space-y-4  flex justify-center"> 
              <h1 class="px-4">Zios Bug-os</h1>
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Home</button>
        </form>
    </div>
</div>