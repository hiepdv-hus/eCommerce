/**
 * OrderItem class definition
 */

import Model from '../libs/model';
import Media from './media';

/**
 * OrderItem constructor
 */
class OrderItem extends Model
{
    constructor(data)
    {
        super();
        this.name = null;
        this.sku = null;
        this.price = 0;
        this.unitOfAccount = null;
        this.quantity = 0;
        this.quantityInStock = 0;
        this.total = 0;
        this.grandTotal = 0;
        this.discount = 0;
        this.vat = 0;
        this.featuredImage = Media;
        this.bind(data);
    }

    typeOfNumber()
    {
        return ['uid', 'price', 'quantity', 'total', 'grandTotal', 'vat'];
    }

    priceString()
    {
        return this.valueStringOrDefault(this.price);
    }

    grandTotalString()
    {
        return this.valueStringOrDefault(this.grandTotal);
    }

    discountString()
    {
        return this.valueStringOrDefault(this.discount);
    }
}

export {OrderItem as default}