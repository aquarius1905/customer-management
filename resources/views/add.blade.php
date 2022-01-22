<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('顧客情報の登録') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form action="{{ route('create', ['user_id' => Auth::user()->id ]) }}" method="post">
                    @csrf
                    <table>
                      <tr class="h-16">
                        <th>名前</th>
                        <td><input type="text" name="name" class="border-gray-300 ml-12 h-8"></td>
                      </tr>
                      <tr>
                        <th class="h-16">フリガナ</th>
                        <td><input type="text" name="name_furigana" class="border-gray-300 ml-12 h-8"></td>
                      </tr>
                      <tr>
                        <th class="h-16">メールアドレス</th>
                        <td><input type="text" name="email" class="border-gray-300 ml-12 h-8"></td>
                      </tr>
                    </table>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">登録</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
