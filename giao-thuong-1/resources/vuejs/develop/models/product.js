/**
 * Product class definition
 */

import Model from '../libs/model';
import Collection from '../libs/collection';
import Media from './media';
import Category from './category';

/**
 * Product constructor
 */
class Product extends Model
{
    constructor(data)
    {
        super();
        this.name = null;
        this.sku = null;
        this.slug = null;
        this.description = null;
        this.detail = null;
        this.price = 0;
        this.specialPrice = 0;
        this.priceForSale = 0;
        this.unitOfAccount = 0;
        this.quantityInStock = 0;
        this.total = 0;
        this.discount = 0;
        this.vat = 0;
        this.isOrigin = 0;
        this.isSelling = 0;
        this.isInStock = 0;
        this.isPublished = 0;
        this.mediaId = 0;
        this.featuredImage = new Media();
        this.images = new Collection(Media);
        this.categories = new Collection(Category);
        this.bind(data);
    }

    typeOfNumber()
    {
        return ['id', 'price', 'quantity', 'total', 'grandTotal', 'vat', 'mediaId', 'isOrigin', 'isInStock', 'isPublished'];
    }

    apiUrl(){
        return {
            detail: "product-detail",
            list: "product-list",
            add: "product-add",
            update: "product-update",
            delete: "product-delete"
        };
    }

    priceString()
    {
        return this.valueStringOrDefault(this.price);
    }

    priceForSalseString()
    {
        return this.valueStringOrDefault(this.priceForSale);
    }

    specialPriceString()
    {
        return this.valueStringOrDefault(this.specialPrice);
    }

    discountString()
    {
        return this.valueStringOrDefault(this.discount);
    }
}

export {Product as default}