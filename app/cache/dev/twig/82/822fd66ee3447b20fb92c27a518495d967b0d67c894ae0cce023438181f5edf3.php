<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bb0a1242ce7eb45d77a9a624eb9e4eebcee6957bff449d7b5dd4e5dec4b33fb6 extends Twig_Template
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
        $__internal_a26ed902ae0db161db173369aea8cf7dc053d63f0d14ff978111a77d58a06668 = $this->env->getExtension("native_profiler");
        $__internal_a26ed902ae0db161db173369aea8cf7dc053d63f0d14ff978111a77d58a06668->enter($__internal_a26ed902ae0db161db173369aea8cf7dc053d63f0d14ff978111a77d58a06668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_a26ed902ae0db161db173369aea8cf7dc053d63f0d14ff978111a77d58a06668->leave($__internal_a26ed902ae0db161db173369aea8cf7dc053d63f0d14ff978111a77d58a06668_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
