<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b7fe43f2eb3131342e95b65de9aeae7b35c23f63c88170a9e48d1b20e3e8067c extends Twig_Template
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
        $__internal_77ffb19aa804631dade3f08b6a66e2d6b6e4b67f58ea35663bde60c7576fb9b0 = $this->env->getExtension("native_profiler");
        $__internal_77ffb19aa804631dade3f08b6a66e2d6b6e4b67f58ea35663bde60c7576fb9b0->enter($__internal_77ffb19aa804631dade3f08b6a66e2d6b6e4b67f58ea35663bde60c7576fb9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_77ffb19aa804631dade3f08b6a66e2d6b6e4b67f58ea35663bde60c7576fb9b0->leave($__internal_77ffb19aa804631dade3f08b6a66e2d6b6e4b67f58ea35663bde60c7576fb9b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
