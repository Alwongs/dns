<tr class="app-table__item">

    <td class="app-table__id">{{ $product->id }}</td>
    <td class="app-table__code">{{ $product->code}}</td>
    <td class="app-table__category">{{ $product->category->name }}</td>
    <td class="app-table__name">{{ $product->name }}</td>
    <td class="app-table__price">{{ $product->price }}</td>
    <td class="app-table__price">{{ $product->count }}</td>
    <td class="app-table__actions">
        <form action="{{ route('products.destroy', $product) }}" method="POST">    
            <a href="{{ route('products.show', $product) }}" class="app-btn btn-success">Открыть</a>    
            <a href="{{ route('products.edit', $product) }}" class="app-btn btn-warning">Редактировать</a> 
            @csrf
            @method('DELETE')
            <input type="submit" class="app-btn btn-danger" value="Удалить">
        </form>    
    </td>

</tr>