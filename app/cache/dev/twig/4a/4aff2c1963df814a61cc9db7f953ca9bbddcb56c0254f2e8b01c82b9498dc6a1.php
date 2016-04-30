<?php

/* base.html.twig */
class __TwigTemplate_270f789a4fcb6e6ef85363d13d7f79c9b40761cf316aa39576dac5fb714e4250 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e94154cc7ba9aacd9a81a362a1993643307252aba0bb63548d1ddec7db36a832 = $this->env->getExtension("native_profiler");
        $__internal_e94154cc7ba9aacd9a81a362a1993643307252aba0bb63548d1ddec7db36a832->enter($__internal_e94154cc7ba9aacd9a81a362a1993643307252aba0bb63548d1ddec7db36a832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e94154cc7ba9aacd9a81a362a1993643307252aba0bb63548d1ddec7db36a832->leave($__internal_e94154cc7ba9aacd9a81a362a1993643307252aba0bb63548d1ddec7db36a832_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc740ee358495e5785bdb762860a9acdda81eba24d48d927679adf37655cbf7e = $this->env->getExtension("native_profiler");
        $__internal_cc740ee358495e5785bdb762860a9acdda81eba24d48d927679adf37655cbf7e->enter($__internal_cc740ee358495e5785bdb762860a9acdda81eba24d48d927679adf37655cbf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cc740ee358495e5785bdb762860a9acdda81eba24d48d927679adf37655cbf7e->leave($__internal_cc740ee358495e5785bdb762860a9acdda81eba24d48d927679adf37655cbf7e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_749a64375ca30aa80a1f13f95a085c2b332d88bcf5c401c9d18edbd716aee9ea = $this->env->getExtension("native_profiler");
        $__internal_749a64375ca30aa80a1f13f95a085c2b332d88bcf5c401c9d18edbd716aee9ea->enter($__internal_749a64375ca30aa80a1f13f95a085c2b332d88bcf5c401c9d18edbd716aee9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_749a64375ca30aa80a1f13f95a085c2b332d88bcf5c401c9d18edbd716aee9ea->leave($__internal_749a64375ca30aa80a1f13f95a085c2b332d88bcf5c401c9d18edbd716aee9ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0418f198f75c12682fbc4902b1415dd6b5a3fe8fcabc937c759ec76ec9eca375 = $this->env->getExtension("native_profiler");
        $__internal_0418f198f75c12682fbc4902b1415dd6b5a3fe8fcabc937c759ec76ec9eca375->enter($__internal_0418f198f75c12682fbc4902b1415dd6b5a3fe8fcabc937c759ec76ec9eca375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0418f198f75c12682fbc4902b1415dd6b5a3fe8fcabc937c759ec76ec9eca375->leave($__internal_0418f198f75c12682fbc4902b1415dd6b5a3fe8fcabc937c759ec76ec9eca375_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc661b0a128b1f1b747eff408c9b3862e3954dccc4bf7d74daf4f6ad113b886f = $this->env->getExtension("native_profiler");
        $__internal_bc661b0a128b1f1b747eff408c9b3862e3954dccc4bf7d74daf4f6ad113b886f->enter($__internal_bc661b0a128b1f1b747eff408c9b3862e3954dccc4bf7d74daf4f6ad113b886f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bc661b0a128b1f1b747eff408c9b3862e3954dccc4bf7d74daf4f6ad113b886f->leave($__internal_bc661b0a128b1f1b747eff408c9b3862e3954dccc4bf7d74daf4f6ad113b886f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
