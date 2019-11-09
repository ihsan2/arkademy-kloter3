def tertinggiketiga(data):
    return data;
    
data = tertinggiketiga(([1,2,3,4,5,6]))
data1 = sorted(data, reverse=True)
data1 = data1[0:3]
print("Input :", data)
if (type(data) != list):
    print("Parameter should be an array!")
elif (len(data) < 3):
    print("Minimal array length is 3!")
else: 
    for i in range (0, len(data1)):
        max = 0;
        if(max < data1[i]):
            max = data1[i]
    print("Output :", max)