import serial
import time

# Configuration
COM_PORT = 'COM7'  # Replace with your Arduino's COM port
BAUD_RATE = 9600   # Match the baud rate in your Arduino sketch
OUTPUT_FILE = "arduino_data.txt"

# Open the serial port
try:
    ser = serial.Serial(COM_PORT, BAUD_RATE, timeout=1)
    print(f"Connected to {COM_PORT} at {BAUD_RATE} baud.")
except serial.SerialException as e:
    print(f"Failed to connect to {COM_PORT}: {e}")
    exit()

try:
    while True:
        if ser.in_waiting > 0:  # Check if data is available
            data = ser.readline().decode('utf-8').strip()  # Read and decode data
            print(f"{data}")  # Print data to console

            # Overwrite the file with the most recent reading
            with open(OUTPUT_FILE, "w") as file:  # Open in write mode to overwrite
                file.write(data)  # Write the most recent data to the file

        time.sleep(0.1)  # Small delay to avoid overloading the CPU

except KeyboardInterrupt:
    print("Program terminated by user.")
finally:
    ser.close()  # Close the serial port
    print("Serial connection closed.")