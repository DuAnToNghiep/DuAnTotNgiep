import { Component } from '@angular/core';
import { HearderComponent } from '../../Components/hearder/hearder.component';
import { BannerComponent } from '../../Components/banner/banner.component';
import { FoodterComponent } from '../../Components/footer/foodter.component';
import { ShowProductComponent } from '../../Components/show-product/show-product.component';


@Component({
  selector: 'app-home',
  standalone: true,
  imports: [HearderComponent, BannerComponent, FoodterComponent, ShowProductComponent],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {

}
