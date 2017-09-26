<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de51f6821c5de34857c71f3c7a542493461abd3413d4a0af4c25d00d9ad25387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de51f6821c5de34857c71f3c7a542493461abd3413d4a0af4c25d00d9ad25387->enter($__internal_de51f6821c5de34857c71f3c7a542493461abd3413d4a0af4c25d00d9ad25387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_dc1e81e8966d002aab4c4d063957493fc0cea74b8d8702d3efce8dd85b80091d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1e81e8966d002aab4c4d063957493fc0cea74b8d8702d3efce8dd85b80091d->enter($__internal_dc1e81e8966d002aab4c4d063957493fc0cea74b8d8702d3efce8dd85b80091d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_de51f6821c5de34857c71f3c7a542493461abd3413d4a0af4c25d00d9ad25387->leave($__internal_de51f6821c5de34857c71f3c7a542493461abd3413d4a0af4c25d00d9ad25387_prof);

        
        $__internal_dc1e81e8966d002aab4c4d063957493fc0cea74b8d8702d3efce8dd85b80091d->leave($__internal_dc1e81e8966d002aab4c4d063957493fc0cea74b8d8702d3efce8dd85b80091d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b33a2be001ce9c7282b07c4308fec1647b4f10f571c719d05f4ccdbe24e28fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33a2be001ce9c7282b07c4308fec1647b4f10f571c719d05f4ccdbe24e28fc7->enter($__internal_b33a2be001ce9c7282b07c4308fec1647b4f10f571c719d05f4ccdbe24e28fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_347721bee8436d3aebdb3840645c3fd6cd76d2ff4c512085794967f4ccf409dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347721bee8436d3aebdb3840645c3fd6cd76d2ff4c512085794967f4ccf409dd->enter($__internal_347721bee8436d3aebdb3840645c3fd6cd76d2ff4c512085794967f4ccf409dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_347721bee8436d3aebdb3840645c3fd6cd76d2ff4c512085794967f4ccf409dd->leave($__internal_347721bee8436d3aebdb3840645c3fd6cd76d2ff4c512085794967f4ccf409dd_prof);

        
        $__internal_b33a2be001ce9c7282b07c4308fec1647b4f10f571c719d05f4ccdbe24e28fc7->leave($__internal_b33a2be001ce9c7282b07c4308fec1647b4f10f571c719d05f4ccdbe24e28fc7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0a734bb77767ef0acd23640de8b3c53bdd1005825a9d3de839270b9913f6f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0a734bb77767ef0acd23640de8b3c53bdd1005825a9d3de839270b9913f6f46->enter($__internal_d0a734bb77767ef0acd23640de8b3c53bdd1005825a9d3de839270b9913f6f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3eb1e241c6f7f1d336a67ba1c5e061b4da3285b9299dc6422cab34eb1faf96aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb1e241c6f7f1d336a67ba1c5e061b4da3285b9299dc6422cab34eb1faf96aa->enter($__internal_3eb1e241c6f7f1d336a67ba1c5e061b4da3285b9299dc6422cab34eb1faf96aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3eb1e241c6f7f1d336a67ba1c5e061b4da3285b9299dc6422cab34eb1faf96aa->leave($__internal_3eb1e241c6f7f1d336a67ba1c5e061b4da3285b9299dc6422cab34eb1faf96aa_prof);

        
        $__internal_d0a734bb77767ef0acd23640de8b3c53bdd1005825a9d3de839270b9913f6f46->leave($__internal_d0a734bb77767ef0acd23640de8b3c53bdd1005825a9d3de839270b9913f6f46_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_694d54437a7184e6bb5ebfca8757692c25a71cab72393c77964f3022c1176101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694d54437a7184e6bb5ebfca8757692c25a71cab72393c77964f3022c1176101->enter($__internal_694d54437a7184e6bb5ebfca8757692c25a71cab72393c77964f3022c1176101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae41d497f539f028775601d109844bbef58c4e12c919d8993f558de8b8fa4799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae41d497f539f028775601d109844bbef58c4e12c919d8993f558de8b8fa4799->enter($__internal_ae41d497f539f028775601d109844bbef58c4e12c919d8993f558de8b8fa4799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae41d497f539f028775601d109844bbef58c4e12c919d8993f558de8b8fa4799->leave($__internal_ae41d497f539f028775601d109844bbef58c4e12c919d8993f558de8b8fa4799_prof);

        
        $__internal_694d54437a7184e6bb5ebfca8757692c25a71cab72393c77964f3022c1176101->leave($__internal_694d54437a7184e6bb5ebfca8757692c25a71cab72393c77964f3022c1176101_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
