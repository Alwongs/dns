<tr class="app-table__item">

    <td class="app-table__id">{{ $category->id }}</td>
    <td class="app-table__name">{{ $category->code}}</td>
    <td class="app-table__phone">{{ $category->name }}</td>
    <td class="app-table__actions">
        <form action="{{ route('categories.destroy', $category) }}" method="POST">    
            <a href="{{ route('categories.show', $category) }}" class="app-btn btn-success">Открыть</a>    
            <a href="{{ route('categories.edit', $category) }}" class="app-btn btn-warning">Редактировать</a> 
            @csrf
            @method('DELETE')
            <input type="submit" class="app-btn btn-danger" value="Удалить">
        </form>    
    </td>

</tr>