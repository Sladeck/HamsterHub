<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8877be4b459d05b9c8494e6861b80a64066d4e9c3fe102b7469c47d5a4b86e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b07905cec3c847f6c54c15de03251767093b6f9447a72653817834b63a7784fb = $this->env->getExtension("native_profiler");
        $__internal_b07905cec3c847f6c54c15de03251767093b6f9447a72653817834b63a7784fb->enter($__internal_b07905cec3c847f6c54c15de03251767093b6f9447a72653817834b63a7784fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b07905cec3c847f6c54c15de03251767093b6f9447a72653817834b63a7784fb->leave($__internal_b07905cec3c847f6c54c15de03251767093b6f9447a72653817834b63a7784fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
