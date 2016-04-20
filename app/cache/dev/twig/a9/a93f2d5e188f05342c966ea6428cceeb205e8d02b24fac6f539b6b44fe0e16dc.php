<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cc56cb3f23abf427542d9f3605b20f88f3a49bfbdd034d047afe890280ab7f3a extends Twig_Template
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
        $__internal_f23365849cf385c02336e176aa649e64ff28d49c52c6b222ded40d2145350653 = $this->env->getExtension("native_profiler");
        $__internal_f23365849cf385c02336e176aa649e64ff28d49c52c6b222ded40d2145350653->enter($__internal_f23365849cf385c02336e176aa649e64ff28d49c52c6b222ded40d2145350653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f23365849cf385c02336e176aa649e64ff28d49c52c6b222ded40d2145350653->leave($__internal_f23365849cf385c02336e176aa649e64ff28d49c52c6b222ded40d2145350653_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'button_widget',  array('type' => isset($type) ? $type : 'reset')) ?>*/
/* */
