<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_11d8e63dcd5465d5297b89ed9592823a9d74a1ee1651fea55f9254070c72f8a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_569a74e4efb3635ca5acb8e2683a292be3f5f67f1b12802ae32ccf38de03dbf7 = $this->env->getExtension("native_profiler");
        $__internal_569a74e4efb3635ca5acb8e2683a292be3f5f67f1b12802ae32ccf38de03dbf7->enter($__internal_569a74e4efb3635ca5acb8e2683a292be3f5f67f1b12802ae32ccf38de03dbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569a74e4efb3635ca5acb8e2683a292be3f5f67f1b12802ae32ccf38de03dbf7->leave($__internal_569a74e4efb3635ca5acb8e2683a292be3f5f67f1b12802ae32ccf38de03dbf7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e02d682a73b1c3a3e935cf01a54b685fcd0402e0c9c532d2f0bcaf7d6a7a8bf = $this->env->getExtension("native_profiler");
        $__internal_8e02d682a73b1c3a3e935cf01a54b685fcd0402e0c9c532d2f0bcaf7d6a7a8bf->enter($__internal_8e02d682a73b1c3a3e935cf01a54b685fcd0402e0c9c532d2f0bcaf7d6a7a8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8e02d682a73b1c3a3e935cf01a54b685fcd0402e0c9c532d2f0bcaf7d6a7a8bf->leave($__internal_8e02d682a73b1c3a3e935cf01a54b685fcd0402e0c9c532d2f0bcaf7d6a7a8bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9a0bcc1b27dd70bfbc3adb287ead1f4895d1fc13486a904a397165817e7349b = $this->env->getExtension("native_profiler");
        $__internal_c9a0bcc1b27dd70bfbc3adb287ead1f4895d1fc13486a904a397165817e7349b->enter($__internal_c9a0bcc1b27dd70bfbc3adb287ead1f4895d1fc13486a904a397165817e7349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c9a0bcc1b27dd70bfbc3adb287ead1f4895d1fc13486a904a397165817e7349b->leave($__internal_c9a0bcc1b27dd70bfbc3adb287ead1f4895d1fc13486a904a397165817e7349b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d01d9cb83e7ba11d3cc0f4d8be360528cfbf07fc4f55cf122de4d293d9c19410 = $this->env->getExtension("native_profiler");
        $__internal_d01d9cb83e7ba11d3cc0f4d8be360528cfbf07fc4f55cf122de4d293d9c19410->enter($__internal_d01d9cb83e7ba11d3cc0f4d8be360528cfbf07fc4f55cf122de4d293d9c19410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d01d9cb83e7ba11d3cc0f4d8be360528cfbf07fc4f55cf122de4d293d9c19410->leave($__internal_d01d9cb83e7ba11d3cc0f4d8be360528cfbf07fc4f55cf122de4d293d9c19410_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
