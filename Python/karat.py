from termcolor import colored
i=0
text=colored("==================================Karatsuba Multiplication=======================================",'red')
text1=colored("--------------------------------->Processing---------------------------------------------------->",'blue')
print(text)
def karat(x,y):
    if len(str(x)) < 3 or len(str(y)) < 3:
        print(text1)
        return x*y
    else:
        print(text1)
        n=max(len(str(x)),len(str(y))) // 2
        a=x//10**(n)
        b=x%10**(n)
        c=y//10**(n)
        d=y% 10**(n)
        p=karat(b,d)
        q=karat((a+b), (c+d))
        r=karat(a,c)
        return ((10**(2*n))*r)+((10**n)*(q-r-p))+p

x=int(input())
y=int(input())
print(" Karatsuba result is : " , karat(x,y))
