import { Component } from '@angular/core';
import { MatIcon, MatIconRegistry } from '@angular/material/icon';
import { DomSanitizer } from '@angular/platform-browser';

@Component({
  selector: 'app-hearder',
  standalone: true,
  imports: [MatIcon],
  templateUrl: './hearder.component.html',
  styleUrl: './hearder.component.css'
})
export class HearderComponent {
  constructor(private iconRegistry: MatIconRegistry, private sanitizer: DomSanitizer) {
    this.registerIcons();
  }

  registerIcons() {
    const phoneIcon = this.sanitizer.bypassSecurityTrustResourceUrl('./assets/icons/phone.svg');
    const userIcon = this.sanitizer.bypassSecurityTrustResourceUrl('./assets/icons/user.svg');
    const cartIcon = this.sanitizer.bypassSecurityTrustResourceUrl('./assets/icons/cart.svg');

    this.iconRegistry.addSvgIcon('phone', phoneIcon);
    this.iconRegistry.addSvgIcon('user', userIcon);
    this.iconRegistry.addSvgIcon('cart', cartIcon);
  }
}
