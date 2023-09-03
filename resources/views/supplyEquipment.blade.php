<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Supply & Equipment') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Supply And Equipment Action(Crud)') }}
                </div>
                <div class="p-6 text-gray-900">
                    <caption>Table For Supply</caption>
                    <table id="supplyTb">
                        <thead>
                            <tr>
                                <th>item_id</th>
                                <th>item_code</th>
                                <th>quantity</th>
                                <th>status</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($supply as $sup_item)
                                <tr>
                                    <td>{{ $sup_item->item_id }}</td>
                                    <td>{{ $sup_item->item_code }}</td>
                                    <td>{{ $sup_item->quantity }}</td>
                                    <td>{{ $sup_item->status }}</td>
                                    <td>{{ $sup_item->created_at }}</td>
                                    <td>{{ $sup_item->updated_at }}</td>
                                    <td><button type="button"><a href="/item/{{ $sup_item->item_id }}">edit</a></button>
                                    </td>
                                    <td><button type="submit">delete</button></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="p-6 text-gray-900">
                    <caption>Table For Equipment</caption>
                    <table id="equipTb">
                        <thead>
                            <tr>
                                <th>item_id</th>
                                <th>item_code</th>
                                <th>quantity</th>
                                <th>status</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($equipment as $equip_item)
                                <tr>
                                    <td>{{ $equip_item->item_id }}</td>
                                    <td>{{ $equip_item->item_code }}</td>
                                    <td>{{ $equip_item->quantity }}</td>
                                    <td>{{ $equip_item->status }}</td>
                                    <td>{{ $equip_item->created_at }}</td>
                                    <td>{{ $equip_item->updated_at }}</td>
                                    <td><button><a href="/item/{{ $equip_item->item_id }}">edit</a></button>
                                    </td>
                                    <td><button>delete</button></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Add Supply And Equipment ') }}

                    <form action="{{ route('itemstore') }}" method="post">
                        @csrf
                        <div>
                            <x-input-label for="item_name" :value="__('Item Name')" />
                            <x-text-input id="item_name" class="block mt-1 " type="text" name="item_name"
                                :value="old('item_name')" />
                            <x-input-error :messages="$errors->get('item_name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="item_code" :value="__('Item Code')" />
                            <x-text-input id="item_code" class="block mt-1 " type="text" name="item_code"
                                :value="old('item_code')" />
                            <x-input-error :messages="$errors->get('item_code')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="quantity" :value="__('Item Quantity')" />
                            <x-text-input id="quantity" class="block mt-1 " type="text" name="quantity"
                                :value="old('quantity')" />
                            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="type" :value="__('Item Type')" />
                            <x-text-input id="type" class="block mt-1 " type="text" name="type"
                                :value="old('type')" />
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>

                        <div>
                            <x-primary-button class="mt-3">
                                {{ __('add') }}
                            </x-primary-button>
                        </div>
                </div>
                </form>


            </div>
        </div>
    </div>




</x-app-layout>
