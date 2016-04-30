<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_69bfeea000e313d283276026edbdf2b7aa3abb53e89aa1dbeccc10aa69baa027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_428d69b87fe658c6fa17955f18d11d92263601208b877f2e6fda72c13315fabd = $this->env->getExtension("native_profiler");
        $__internal_428d69b87fe658c6fa17955f18d11d92263601208b877f2e6fda72c13315fabd->enter($__internal_428d69b87fe658c6fa17955f18d11d92263601208b877f2e6fda72c13315fabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428d69b87fe658c6fa17955f18d11d92263601208b877f2e6fda72c13315fabd->leave($__internal_428d69b87fe658c6fa17955f18d11d92263601208b877f2e6fda72c13315fabd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_026a115354f7d7bd52e6bc8db7cdc0c9828e872c70f084b11368164c617b46ce = $this->env->getExtension("native_profiler");
        $__internal_026a115354f7d7bd52e6bc8db7cdc0c9828e872c70f084b11368164c617b46ce->enter($__internal_026a115354f7d7bd52e6bc8db7cdc0c9828e872c70f084b11368164c617b46ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_026a115354f7d7bd52e6bc8db7cdc0c9828e872c70f084b11368164c617b46ce->leave($__internal_026a115354f7d7bd52e6bc8db7cdc0c9828e872c70f084b11368164c617b46ce_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad3759173d982f78d81cd457c316a19b1b1bc8e1dc11b98f36a99378f4658946 = $this->env->getExtension("native_profiler");
        $__internal_ad3759173d982f78d81cd457c316a19b1b1bc8e1dc11b98f36a99378f4658946->enter($__internal_ad3759173d982f78d81cd457c316a19b1b1bc8e1dc11b98f36a99378f4658946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ad3759173d982f78d81cd457c316a19b1b1bc8e1dc11b98f36a99378f4658946->leave($__internal_ad3759173d982f78d81cd457c316a19b1b1bc8e1dc11b98f36a99378f4658946_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
