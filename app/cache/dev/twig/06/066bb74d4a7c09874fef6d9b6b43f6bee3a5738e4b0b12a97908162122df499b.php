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
        $__internal_48b0edd3633b4ac4c140bfd3984294460cd37adcae5f40d635e0cbe4b6221e7a = $this->env->getExtension("native_profiler");
        $__internal_48b0edd3633b4ac4c140bfd3984294460cd37adcae5f40d635e0cbe4b6221e7a->enter($__internal_48b0edd3633b4ac4c140bfd3984294460cd37adcae5f40d635e0cbe4b6221e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_48b0edd3633b4ac4c140bfd3984294460cd37adcae5f40d635e0cbe4b6221e7a->leave($__internal_48b0edd3633b4ac4c140bfd3984294460cd37adcae5f40d635e0cbe4b6221e7a_prof);

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
