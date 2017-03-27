// -----------------------------------
// Controlling my garage door over the Internet
// -----------------------------------


int led1 = D0;
int led2 = D7;

void setup()
{

   pinMode(led1, OUTPUT);
   pinMode(led2, OUTPUT);

   Particle.function("led",ledToggle);
   
   digitalWrite(led1, LOW);
   digitalWrite(led2, LOW);

}

int ledToggle(String command) {
   

    if (command=="on") {
        digitalWrite(led1,HIGH);
        digitalWrite(led2,HIGH);
        
        delay(2000);
        
        digitalWrite(led1,LOW);
        digitalWrite(led2,LOW);
        return 1;
    }
    else {
        return -1;
    }
}
