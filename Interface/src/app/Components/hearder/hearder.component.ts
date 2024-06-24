import { Component } from '@angular/core';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import {faCartShopping, faMagnifyingGlass, faUser } from '@fortawesome/free-solid-svg-icons';
import {faFacebook, faInstagram, faTiktok, } from '@fortawesome/free-brands-svg-icons';

@Component({
  selector: 'app-hearder',
  standalone: true,
  imports: [FontAwesomeModule],
  templateUrl: './hearder.component.html',
  styleUrl: './hearder.component.css'
})
export class HearderComponent {
 faMagnifyingGlass = faMagnifyingGlass;
 faUser = faUser;
 faCartShopping = faCartShopping;
 faFacebook = faFacebook;
 faTiktok = faTiktok;
 faInstagram = faInstagram;
}
