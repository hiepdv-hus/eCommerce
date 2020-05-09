/**
 * Order class definition
 */

import Model from '../libs/model';
import Collection from '../libs/collection';
import OrderItem from './orderItem';

/**
 * Order constructor
 */
class Order extends Model
{
    constructor(data)
    {
        super();
        this.name = null;
        this.code = null;
        this.total = 0;
        this.grandTotal = 0;
        this.totalPay = 0;
        this.discount = 0;
        this.excess = 0;
        this.vat = 0;
        this.creatorName = null;
        this.editorName = null;
        this.curatorName = null;
        this.curatorPhone = null;
        this.orderDate = null;
        this.modifiedDate = null;
        this.targetDate = null;
        this.statusName = null;
        this.statusColor = null;
        this.products = new Collection(OrderItem);
        this.note = null;
        this.bind(data);
    }

    typeOfNumber()
    {
        return ['total', 'grandTotal', 'discount', 'excess'];
    }

    totalString()
    {
        return this.valueStringOrDefault(this.price);
    }

    grandTotalString()
    {
        return this.valueStringOrDefault(this.grandTotal);
    }

    totalPayString()
    {
        return this.valueStringOrDefault(this.totalPay);
    }

    discountString()
    {
        return this.valueStringOrDefault(this.discount);
    }

    excessString()
    {
        return this.valueStringOrDefault(this.excess);
    }

    update()
    {
        this.grandTotal = 0;
        this.products.forEach((item) => {
            this.grandTotal += item.grandTotal;
        });
    }
}

export {Order as default}