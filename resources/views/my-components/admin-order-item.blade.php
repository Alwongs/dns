<tr class="app-table__item">

    <td class="app-table__id">{{ $order->id }}</td>
    <td class="app-table__name">{{ $order->name}}</td>
    <td class="app-table__phone">{{ $order->phone }}</td>
    <td class="app-table__date">{{ $order->created_at->format('H:i d.m.Y') }}</td>
    <td class="app-table__price">{{ $order->getFullPrice() }}</td>
    <td class="app-table__actions">
        <button class="app-btn btn-green">Открыть</button>    
    </td>

</tr>