import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NaVComponent } from './na-v.component';

describe('NaVComponent', () => {
  let component: NaVComponent;
  let fixture: ComponentFixture<NaVComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [NaVComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(NaVComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
