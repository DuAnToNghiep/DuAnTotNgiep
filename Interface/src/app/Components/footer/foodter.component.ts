import { Component } from '@angular/core';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { faTiktok } from '@fortawesome/free-brands-svg-icons';

@Component({
  selector: 'app-foodter',
  standalone: true,
  imports: [FontAwesomeModule],
  templateUrl: './foodter.component.html',
  styleUrl: './foodter.component.css'
})
export class FoodterComponent {
  faTiktok = faTiktok;
}
