import Global from "../../global/global";
import Swiper, {EffectCards, Navigation} from "swiper";

class HomePage {
    constructor() {
        this.global = Global;
    }

    static getInstance() {
        if (!this.instance) {
            this.instance = new this();
        }
        return this.instance;
    }
}

$(function () {
    HomePage.getInstance();
});
