# Filament Info
This is the code for a static PHP website that displays simple filament information, such as brand, color and printing temperatures which are provided by URL parameters.

The following URL parameters are supported
| Parameters | Required? | Example Value |
| ---------- | --------- | ------------- |
| material | Yes | PLA |
| brand | Yes | Polymaker |
| product_line | No | PolyLite |
| color | Yes | Yellow |
| color_code | No | FFE800 |
| extruder_temp | No | 215 |
| bed_temp | No | 65 |

A valid example URL would look like this: https://example.org/index.php?material=PLA&brand=Polymaker&product_line=PolyLite&color=Yellow&color_code=FFE800&extruder_temp=215&bed_temp=65

The website looks like this:

![Website Screenshot](/images/website.png)
