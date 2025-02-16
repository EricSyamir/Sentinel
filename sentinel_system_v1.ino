
// Code library for LCD 16x2 I2C module
#include <Wire.h>
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27,16,2);

// Code library for HC-SR04 module
#include "SR04.h"
#define TRIG_PIN 2
#define ECHO_PIN 3
SR04 sr04 = SR04(ECHO_PIN,TRIG_PIN);
float ultra_sense_read;

// Active buzzer pin designation
const int active_buzzer = 12;

// LED pin designation
#define LEDRedPin 8

void setup() {
  
  // Serial monitor setup
  Serial.begin(9600);
  
  // Active buzzer pin setup
  pinMode(active_buzzer, OUTPUT);

  // LED pin setup
  pinMode(LEDRedPin, OUTPUT);
  
  // LCD display setup
  lcd.init(); // LCD initialization
  lcd.init();
  lcd.backlight();
  lcd.setCursor(4,0);
  lcd.print("SENTINEL");

}

void loop() {
  
  // Phase 1: Data collection from HC-SR04 module
  ultra_sense_read = sr04.Distance();
  delay(1000);

  // Phase 2: Data processing and output display

  int level = ((20 - ultra_sense_read)/20 * 100); // Assume the bin's height is 20cm
  //Serial.print(level);
  lcd.clear();

 if (level >= 90) {
    digitalWrite(active_buzzer, HIGH);
    digitalWrite(LEDRedPin, HIGH);
    delay(100);
    Serial.print(level);
    lcd.setCursor(0,0);
    lcd.print("Fill level: FULL");
    lcd.setCursor(0,1);
    lcd.print("Remove trash!");
  }

  else if (level >= 0 && level <= 90) {
    digitalWrite(active_buzzer, LOW);
    digitalWrite(LEDRedPin, LOW);
    delay(100);
    Serial.print(level);
    lcd.setCursor(0,0);
    lcd.print("Fill level:EMPTY");
    lcd.setCursor(0,1);
    lcd.print("Throw here!");
  } 

  else {
    digitalWrite(active_buzzer, LOW);
    digitalWrite(LEDRedPin, LOW);
    delay(100);
    Serial.print(level-level);
    lcd.setCursor(0,0);
    lcd.print("Fill level:EMPTY");
    lcd.setCursor(0,1);
    lcd.print("Throw here!");
  }
} 
