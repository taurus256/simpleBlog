<?php if (!empty($this->options['logo'])){ ?>
#layout header #logo a, #layout header #logo > span {
    background-image: url("<?php echo $config->upload_root . $this->options['logo']['original']; ?>") !important;
    background-size: contain;
}
<?php } ?>

body {
    <?php if ($this->options['bgImage'] != "") echo "background-image: url(" . $config->upload_root . $this->options['bgImage']['original'] . ");" ?>
    <?php if ($this->options['bgBodyColor'] != "") echo "background-color: ".$this->options['bgBodyColor'].";" ?>;
    <?php if ($this->options['bodyFontFamily'] != "") echo "font-family: \"".$this->options['bodyFontFamily']."\";".PHP_EOL ?>
    <?php if ($this->options['bodyFontSize'] != "") echo "font-size: ".$this->options['bodyFontSize']." !important;".PHP_EOL ?>
    <?php if ($this->options['bodyFontColor'] != "") echo "color: ".$this->options['bodyFontColor']." !important;".PHP_EOL ?>
}

h1, h2, h3, h4, h5, h6 {
    <?php if ($this->options['bodyFontColor'] != "") echo "color: ".$this->options['bodyFontColor']." !important;".PHP_EOL ?>
}

.content_list_item {
    <?php if ($this->options['bodyFontColor'] != "") echo "color: ".$this->options['bodyFontColor']." !important;".PHP_EOL ?>
}

.content_item .field{
    <?php if ($this->options['bodyFontColor'] != "") echo "color: ".$this->options['bodyFontColor']." !important;".PHP_EOL ?>
}

#body {
    <?php if ($this->options['bgTextColor'] != "") echo "background-color: ".$this->options['bgTextColor']." !important;".PHP_EOL ?>
}

header{
    <?php if ($this->options['bgTextColor'] != "") echo "background-color: ".$this->options['bgTextColor']." !important;".PHP_EOL ?>
}

footer{
    <?php if ($this->options['bgTextColor'] != "") echo "background-color: ".$this->options['bgTextColor']." !important;".PHP_EOL ?>
}

section {
    <?php if ($this->options['bgTextColor'] != "") echo "background-color: ".$this->options['bgTextColor']." !important;".PHP_EOL ?>
}

.widget {
    <?php if ($this->options['bgTextColor'] != "") echo "background-color: ".$this->options['bgTextColor']." !important;".PHP_EOL ?>
}

.tabs-menu .tabbed li.active a, .tabs-menu .tabbed li.active a:hover{
    <?php if ($this->options['bgTextColor'] != "") echo "background-color: ".$this->options['bgTextColor']." !important;".PHP_EOL ?>
}

#body aside .menu, #body aside .menu li, #body section .menu, #body section .menu li
{
    <?php if ($this->options['bgTextColor'] != "") echo "background-color: ".$this->options['bgTextColor']." !important;".PHP_EOL ?>
}

section article{
    <?php if ($this->options['bgTextColor'] != "") echo "background-color: ".$this->options['bgTextColor']." !important;".PHP_EOL ?>
}



#body section article{
    <?php if ($this->options['bodyFontFamily'] != "") echo "font-family: \"".$this->options['bodyFontFamily']."\";".PHP_EOL ?>
}

#body section {
    float: <?php echo $this->options['aside_pos']=='left' ? 'right' : 'left'; ?> !important;
}
#body aside {
    float: <?php echo $this->options['aside_pos']=='left' ? 'left' : 'right'; ?> !important;
}
#body aside .menu li ul {
    <?php echo $this->options['aside_pos']=='left' ? 'right' : 'left'; ?>: auto !important;
    <?php if ($this->options['aside_pos']=='left'){ ?>left: 210px;<?php } ?>
}
@media screen and (max-width: 980px) {
    #layout { width: 98% !important; min-width: 0 !important; }
}
