@extends('site.base')

@section('content')
    @php
        $packages = \App\Models\Package::all()
    @endphp
    <div class="max-w-4xl mx-auto">
        <div class="flex flex-col mt-10">
            <month-picker-input :no-default="true"></month-picker-input>
            @foreach($packages as $package)
                <div class="flex flex-row border-b pb-6">
                    <img src="https://api.adorable.io/avatars/285/abott@adorable.png" class="rounded-large h-56"/>
                    <div class="flex flex-col ml-12 w-full">
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col">
                                <span class="text-2xl">Package Name</span>
                                <div class="flex flex-row mb-1">
                                    <span><ficon :icon="['fas', 'star']"></ficon><ficon :icon="['fas', 'star']"></ficon><ficon :icon="['fas', 'star']"></ficon><ficon :icon="['fas', 'star']"></ficon><ficon :icon="['far', 'star']"></ficon></span>
                                    <span class="ml-4">{{ $package->agency->name }}</span>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <p><span class="font-bold text-xl">RM {{ $package->price }}</span> / pax</p>
                                <span class="text-gray-500 underline text-sm self-end">Total RM (TOTAL)</span>
                            </div>
                        </div>
                        <hr class="w-1/12">
                        <div class="w-full flex flex-col mt-2">
                            <div class="w-full grid grid-cols-12 py-2 border-b">
                                <div class="col-span-1 flex flex-col justify-center items-center">
                                    <ficon :icon="['fas', 'plane']"></ficon>
                                </div>
                                <div class="col-span-11">
                                    Flight Provider: {{ $package->flight_operator }}
                                </div>
                            </div>
                            <div class="w-full grid grid-cols-12 py-2">
                                <div class="grid grid-cols-6 col-span-6">
                                    <div class="col-span-1 flex flex-col justify-center items-center">
                                        <ficon :icon="['fas', 'hotel']"></ficon>
                                    </div>
                                    <div class="col-span-5">
                                        Makkah Hotel: <br>{{ $package->makkahHotel->name }}
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 col-span-6">
                                    <div class="col-span-1 flex flex-col justify-center items-center">
                                        <ficon :icon="['fas', 'hotel']"></ficon>
                                    </div>
                                    <div class="col-span-5">
                                        Madinah Hotel: <br>{{ $package->madinahHotel->name }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
