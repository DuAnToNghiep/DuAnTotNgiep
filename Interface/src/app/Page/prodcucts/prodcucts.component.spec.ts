import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProdcuctsComponent } from './prodcucts.component';

describe('ProdcuctsComponent', () => {
  let component: ProdcuctsComponent;
  let fixture: ComponentFixture<ProdcuctsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ProdcuctsComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ProdcuctsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
