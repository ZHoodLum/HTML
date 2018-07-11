目录
--
[HTML界面与JSP界面基本文档结构区别](#HTML界面与JSP界面基本文档结构区别)

[用元数据说明文档](#用元数据说明文档)


---
---

## HTML4与HTML5区别：
> 指定字符编码变化：
>*  HTML4：
```
<meta http-equiv=‶content-type″ content=‶text/html; charset=UTF-8″>
```
>*  HTML5:
```
<meta charset=‶UTF-8″>
```
> DOCTYPE声明变化：
>* HTML4：
```
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
```
>* HTML5 :刻意不使用版本声明，一份文档将会适用于所有版本的 HTML。HTML5 中的 DOCTYPE 声明方法（不区分大小写）如下：
```
 <!DOCTYPE html>
 ```
> 可以省略标记的元素
在 HTML5 中，标签的标记分为`“不允许写结束标记”`、`“可以省略结束标记”`和`“开始标记和结束标记全部可以省略”`三种类型。让我们来针对这三类情况列举一个标签清单，其中包括 HTML5 中的新标签:

>* 1、不允许写结束标记的标签有：不允许写结束标记的标签”是指，不允许使用开始标记与结束标记将标签括起来的形式，只允许使用“<标签/>”的形式进行书写。例如“<br>...</br>”的书写方式是错误的，正确的书写方式为“<br/>”。当然，HTML5之前的版本中<br>这种写法可以被沿用。
```
area、base、br、col、command、embed、hr、img、input、keygen、link、meta、param、source、track、wbr
```
>* 2、可以省略结束标记的标签有：可以省略全部标记的标签”是指，该标签可以完全被省略。请注意，即使标记被省略了，该标签还是以隐式的方式存在的。例如将body标签省略不写时，但它在文档结构中还是存在的，可以使用document.body进行访问。
```
li、dt、dd、p、rt、rp、op、optgroup、option、colgroup、thead、tbody、tfoot、tr、td、th
```
>* 3、可以省略全部标记的标签有：
```
html、head、body、colgroup、tbody。
```
>* 具有boolean值的属性:对于具有boolean值的属性，例如 disabled 与 readonly 等，当只写属性而不指定属性值时，表示属性值为true；如果想要将属性值设为flase，可以不使用该属性。另外，要想将属性值设为true时，也可以将属性名设定为属值，或将空字符串设定为属性值。属性值的设定方法可以参考下面的示例：
```
<!--只写属性不写属性值，代表属性为true-->
<input type="checkbox" checked>
<!--不写属性代表属性为false-->
<input type="checkbox">
<!--属性值=属性名，代表属性为true-->
<input type="checkbox" checked="checked">
<!--属性值=空字符串，代表属性为true-->
<input type="checkbox" checked="">
```
> 省略引号:在之前的 HTML 版本中，大家已经知道，指定属性值的时候，属性值两边既可以用双引号，也可以用单引号。HTML5 在此基础上做了一些改进，当属性值不包括空字符串、“<”、“>”、"="、单引号、双引号等字符时，属性值两边的引号可以省略。如下面的代码所示：
```
<!--请注意type的属性值两边的引号-->
<input type="text">
<input type='text'>
<input type=text>
示例：

<!DOCTYPE html>
<meta charset="UTF-8">
<title>HTML5 标记示例</title>
<p>这段代码是根据HTML5语法
<br/>编写出来的。
```
>> 1、该代码完全是用 HTML5 写成的；
>> 2、省略了<html>、<head>、<body>等标签；
>> 3、DOCTYPE申明使用了 HTML5 支持的简洁申明方式；
>> 4、用<meta>标签的 charset 属性指定字符编码；
>> 5、省略了<p>标签的结束标记；
>> 6、使用<标签/>的方式来结束<title>标签以及<br>标签。
 
> 新增的元素和废除的元素

>>* 新增的结构元素
>>>* section：表示页面中内容块，比如章节、页眉、页脚或页面中的其他部分，可与`<h1>`到`<h6>`结合使用表示文档结构。
>>>* article:表示页面中一块与上下文不相关的独立内容，比如博客中的一篇文章或报纸中的一篇文章。
>>>* aside:表示article内容之外，与article内容相关的辅助信息。
>>>* header：表示页面中的区域块，通常用它表示标题。
>>>* hgroup：用于对整个页面或页面中标题进行整合。
>>>* footer：表示页面中的区域块，通常表示区域快的脚部或底部，用于承载作者姓名、创作日期等与作者的元素。
>>>* nav:表示页面中导航部分。
>>>* figure：表示一段独立的流内容，一般表示主体流内容的一个独立单元。

>>* 新增的其他元素
>>>* video:定义电影片段、视频流等视频。
>>>* audio：定义音乐或音频流。
>>>* canvas：画布，本身没有行为，仅提供一块画布，但它的API展现给JavaScript及脚本，能够把想绘制的东西绘制在canvas上。
>>>* embed mark progress meter time ruby rt rp wbr command details detalist
>>>* datagrid keygen output source menu

>>* 新增的input元素的类型
>>>* email：表示必须输的email地址
>>>* url：表示文本框输入的一个地址
>>>* number：表示数字
>>>* range：表示数字范围值
>>>* DataPickers：表示日历的日期、时间

>>* 废除的元素
>>>* 能使用css代替的元素:basefont big center font s tt u等

>>>* 不再使用frame框架:由于frame框架对网页可用性存在负面影响，HTML5中已不支持frame框架，只支持iframe框架或者用服务器方式创建的由多个页面组成的复合页面的形式，同时将frameset元素、frame元素、noframes元素废除。
>>>* 注:只有部分浏览器支持的元素其他被废除的元素

>>* 新增的属性和废除的属性

>>* 新增的属性
>>>* 表单相关的属性
>>>* 链接相关的属性
>>>* 其他属性

>>* 废除的属性

> 全局属性:HTML5中新增全局属性的概念，全局属性指可以对任何元素都使用的属性。
>>>* contentEditable属性允许用户编辑元素中内容，使用该属性的元素必须为可以获得鼠标焦点的元素，而且在点击鼠标后向用户提供一个插入符号，提示用户该元素允许进行编辑。是boolean值类型，可以设为true、false或继承状态。其中，true代表可编辑，false代表不可编辑，当未指定true或false时与父元素的继承状态相同。
>>>* designMode属性:用来指定整个页面是否可编辑，当页面可编辑时，页面中所有支持contentEditable属性的元素都变为可编辑状况。designMode属性只能在JavaScript脚本中被修改、编辑。属性值可取on（可编辑）或off（不可编辑）。
>>>* hidden属性:HTML5中所有元素都允许使用hidden属性，该属性类似于input元素中hidden元素，boolean值，可设为true（不可见）、false（可见）。当某元素的hidden属性值为true时，浏览器不渲染该元素，使该元素处于不可见状态，但浏览器创建该元素内容，即页面加载后允许使用JavaScript脚本将该属性值取消，使该元素可见。
>>>* spellcheck属性:针对input（type=text）与textarea这两个文本输入框提供的一个新属性，主要对用户输入内容进行拼写与语法检查。属性值为boolean值，可取true或false。
>>>* tableindex属性:当点击Tab键时，让窗口或页面中可获得焦点的链接元素或表单元素进行遍历，tableindex表示该元素第几个被访问到。若tableindex值为"-1"时表示无法获取该元素.
 
 
 
## HTML界面与JSP界面基本文档结构区别
* html基本文档组成
```
<!DOCTYPE html>
<html>
<head>
<title>文档的标题</title>
</head>
<body>
  * HTMl文档的外层元素由两个元素确定：DOCTYPE、html。DOCTYPE元素让浏览器明白处理的是HTML文档。
  * HTML元素的开始标签，告诉浏览器直到HTML结束标签，所有元素都应作为HTML处理。
</body>
</html>
```
* jsp基本文档组成
```
<%@ page language="java" contentType="text/html; charset=UTF-8"%>
<%@ taglib prefix="f" uri="http://java.sun.com/jsp/jstl/fmt"%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>文档标题</title>
</head>
<body>
 *    组成jsp的五部分 
      1.模板元素：html、xml
      
      2.注释元素
        (1)html注释，显示在客户端源码中  <!--  注释 -->
        
        (2)jsp注释，不会显示在客户端源码，只在jsp中 <% -- 注释 --%>
            
        (3)单行注释与多行注释， 单行// 多行/**  注释  */
            
      3.指令元素
      (1)page指令：     <%@page %>
      
      (2)include指令：  包含代码,静态包含 <%@include file=""%>
      
      (3)taglib：      <%@taglib prefix="c"   uri="taglibURI" %> 标签前缀找到标签描述文件和标签库的方式

      4.脚本元素
      (1)声明   <%!  方法或者变量%> 被转换成servlet中的实例属性和实例方法
      
      (2)表达式  <%=%>  例：<%="你好，世界" %>  相当于jsp中的out.println("你好，世界");  转化成servlet中的out.print("你好，世界" );
      
      (3)scriptlets <%  %>  多个scriptlets合成一个被包含在servlet的service方法中

      5.动作元素
      1.<jsp:param>， 
      以名值对的形式为其他标签提供附加信息 <jsp:param name="" value=""/>
      
      2.<jsp:include>， 
      包含的是结果，两个文件   <!--flush属性必须为true-->   <jsp:include page="" flush="true"/>
      或者
      <jsp:include page="" flush=""true"> 
          <jsp:param name="" value=""/>  
      </jsp:include>
      
      3<jsp:forward>，  
      请求转发,每当遇到此操作时，就停止执行当前的jsp,转而执行被转发的资源。 <jsp:forward page=""/>
      或者
      <jsp:forward page="">
          <jsp:param name="" value=""/>
      </jsp:forward>
      
      4.<jsp:useBean>、<jsp:setProperty>、<jsp:getProperty>

      <jsp:useBean id="id" scope="page|request|session|application" class="">
         <jsp:setProperty name="id" property="*"/>
      </jsp:useBean>

      <jsp:getProperty name="id" property="属性名"/>
      
      5.<jsp:plugin>
      可以使用它来插入Applet或者JavaBean
</body>
</html>
```

## 用元数据说明文档
* 指定名/值数据对
> 1.如表：meta元素使用的预定义元素数据类型
  
  元素数据名称|说明|
  |-|:-:|
  application name|当前页所属web应用系统名称
  author|当前页作者名
  description|用来生成HTML的软件名称（通常用于以Ruby on Rails、ASP.NET等服务器端框架生成HTLML页的情况下）
  keywords|一批以逗号分开的字符串，用来描述页面的内容
  
> 2.声明字符串编码：
```
<mate charset="Utf-8"/>
```
 
> 3.模拟HTTP标头字段： 
```
<meta http-equiv="refresh" content="5">
注:   refresh的设置为每5s再次载入界面
      http-equiv属性使用至有：`refresh`、`default-style`、`content-type`。
 ```







