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
        $__internal_e69bbe9046b5d13328d9e90a2e759e37af2e54531f5b06b4b171032db371fa63 = $this->env->getExtension("native_profiler");
        $__internal_e69bbe9046b5d13328d9e90a2e759e37af2e54531f5b06b4b171032db371fa63->enter($__internal_e69bbe9046b5d13328d9e90a2e759e37af2e54531f5b06b4b171032db371fa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e69bbe9046b5d13328d9e90a2e759e37af2e54531f5b06b4b171032db371fa63->leave($__internal_e69bbe9046b5d13328d9e90a2e759e37af2e54531f5b06b4b171032db371fa63_prof);

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
