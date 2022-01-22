<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('顧客情報一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <table class="w-full">
                    <tr class="mb-4 h-16 bg-gray-100">
                      <th>ID</th>
                      <th>名前</th>
                      <th>フリガナ</th>
                      <th>メールアドレス</th>
                      <th></th>
                      <th></th>
                    </tr>
                    @foreach($items as $item)
                    <tr class="h-16">
                      <td class="text-center">{{ $item->id }}</td>
                      <form action="{{ route('update', ['id' => $item->id, 'user_id' => Auth::user()->id ]) }}" method="post">
                        @csrf
                        <td class="text-center"><input type="text" name="name" value="{{ $item->name }}" class="border-gray-300 h-8 w-4/5"></td>
                        <td class="text-center"><input type="text" name="name_furigana"  value="{{ $item->name_furigana }}" class="border-gray-300 h-8 w-4/5"></td>
                        <td class="text-center"><input type="text" name="email" value="{{ $item->email }}" class="border-gray-300 h-8 w-full"></td>
                        <td class="text-center"><button type="submit"  class="bg-orange-400 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">更新</button></td>
                      </form>
                      <form action="{{ route('delete', ['id' => $item->id ]) }}" method="post">
                        @csrf
                        <td class="text-center"><button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">削除</button></td>
                      </form>
                    </tr>
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
