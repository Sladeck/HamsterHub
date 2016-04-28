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
        $__internal_cbce60247f4e052d5b2c1b52684ebd98fdc4f6f83467f67f4bd5c1a6c4bf0b3e = $this->env->getExtension("native_profiler");
        $__internal_cbce60247f4e052d5b2c1b52684ebd98fdc4f6f83467f67f4bd5c1a6c4bf0b3e->enter($__internal_cbce60247f4e052d5b2c1b52684ebd98fdc4f6f83467f67f4bd5c1a6c4bf0b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cbce60247f4e052d5b2c1b52684ebd98fdc4f6f83467f67f4bd5c1a6c4bf0b3e->leave($__internal_cbce60247f4e052d5b2c1b52684ebd98fdc4f6f83467f67f4bd5c1a6c4bf0b3e_prof);

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
