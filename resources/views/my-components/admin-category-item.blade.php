<tr class="app-table__item">

    <td class="app-table__id">{{ $category->id }}</td>
    <td class="app-table__name">{{ $category->code}}</td>
    <td class="app-table__phone">{{ $category->name }}</td>
    <td class="app-table__actions">
        <form action="{{ route('categories.destroy', $category) }}" method="POST">    
            <a href="{{ route('categories.show', $category) }}" class="app-btn btn-green">Открыть</a>    
            <a href="{{ route('categories.edit', $category) }}" class="app-btn btn-warn">Редактировать</a> 
            @csrf
            @method('DELETE')
            <input type="submit" class="app-btn btn-red" value="Удалить">
        </form>    
    </td>

</tr>