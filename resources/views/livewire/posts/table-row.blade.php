<tr class="{{ $post->is_archived ? 'bg-gray-200' : '' }}">
    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $post->id }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $post->title }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $post->content }}</td>
    <td class="px-6 py-4 whitespace-nowrap text-center">
        <a href="#" wire:click="archive" wire:confirm="Are you sure?" class="text-blue-600 hover:underline border px-4 py-2 bg-red-100">Archive</a>
        <a href="#" class="text-red-600 hover:underline border px-4 py-2" bg-red-100></a>
    </td>
</tr>
