<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ea81dceff93b2e222bb6070daa9ec43357b8af086afbf452114723fac342bf27 extends Twig_Template
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
        $__internal_e756cfea5c86a2ac6f58fe5570c49e62a7bf048ccc35eb6635590170679ca66f = $this->env->getExtension("native_profiler");
        $__internal_e756cfea5c86a2ac6f58fe5570c49e62a7bf048ccc35eb6635590170679ca66f->enter($__internal_e756cfea5c86a2ac6f58fe5570c49e62a7bf048ccc35eb6635590170679ca66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e756cfea5c86a2ac6f58fe5570c49e62a7bf048ccc35eb6635590170679ca66f->leave($__internal_e756cfea5c86a2ac6f58fe5570c49e62a7bf048ccc35eb6635590170679ca66f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
