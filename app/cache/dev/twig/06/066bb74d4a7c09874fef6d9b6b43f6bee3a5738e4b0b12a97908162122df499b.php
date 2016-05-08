<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_7dd02b9eb182662438e55eaed1eb6212b3cee02025e4f9f2e81f1b26824e8cf4 extends Twig_Template
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
        $__internal_01cd8c232882c7be7fe19ac40a8f1f9f5d65829ba719433c3e2c2e6c0de940fc = $this->env->getExtension("native_profiler");
        $__internal_01cd8c232882c7be7fe19ac40a8f1f9f5d65829ba719433c3e2c2e6c0de940fc->enter($__internal_01cd8c232882c7be7fe19ac40a8f1f9f5d65829ba719433c3e2c2e6c0de940fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_01cd8c232882c7be7fe19ac40a8f1f9f5d65829ba719433c3e2c2e6c0de940fc->leave($__internal_01cd8c232882c7be7fe19ac40a8f1f9f5d65829ba719433c3e2c2e6c0de940fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
