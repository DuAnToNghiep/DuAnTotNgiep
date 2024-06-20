import { Component } from '@angular/core';
import { HearderComponent } from '../../Components/hearder/hearder.component';


@Component({
  selector: 'app-home',
  standalone: true,
  imports: [HearderComponent],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {

}
