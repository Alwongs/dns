<tr class="orders-table__item">

    <td class="orders-table__id">{{ $order->id }}</td>
    <td class="orders-table__name">{{ $order->name}}</td>
    <td class="orders-table__phone">{{ $order->phone }}</td>
    <td class="orders-table__date">{{ $order->created_at->format('H:i d.m.Y') }}</td>
    <td class="orders-table__price">{{ $order->getFullPrice() }}</td>
    <td class="orders-table__actions">
        <button class="app-btn btn-green">Открыть</button>    
    </td>

</tr>