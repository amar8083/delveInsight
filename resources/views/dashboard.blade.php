<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section class="container my-5 text-center font-weight-bold">
        <h3>Enquiry Form Data</h3>
    </section>
   <section class="container">
       <div>
           <table class="table text-light text-center">
               <thead class="bg-danger font-semibold">
                   <tr>
                       <td scope="col">Sr No.</td>
                       <td scope="col">Name</td>
                       <td scope="col">Email</td>
                       <td scope="col">Company</td>
                       <td scope="col">Mobile Number</td>
                       <td scope="col">Message</td>
                   </tr>
               </thead>
               <tbody class="bg-success">
                   @foreach($submitdatas as $submit)
                   <tr>
                       <td scope="col">{{$submit->id}}</td>
                       <td scope="col">{{$submit->name}}</td>
                       <td scope="col">{{$submit->email}}</td>
                       <td scope="col">{{$submit->company}}</td>
                       <td scope="col">{{$submit->phone}}</td>
                       <td scope="col">{{$submit->message}}</td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
           
       </div>
       {{ $submitdatas->links() }}
   </section>
</x-app-layout>
